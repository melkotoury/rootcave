import { NextRequest, NextResponse } from 'next/server';
import nodemailer from 'nodemailer';
import formidable from 'formidable';
import fs from 'fs';

export const config = {
  api: {
    bodyParser: false,
  },
};

export async function POST(req: NextRequest) {
  const form = new formidable.IncomingForm();

  return new Promise((resolve, reject) => {
    form.parse(req, async (err, fields, files) => {
      if (err) {
        return reject(NextResponse.json({ message: 'Error parsing form data', err }, { status: 500 }));
      }

      const { name, email, subject, message } = fields;
      const file = files.file;

      const transporter = nodemailer.createTransport({
        service: 'gmail',
        auth: {
          user: process.env.EMAIL_USER,
          pass: process.env.EMAIL_PASS,
        },
      });

      const mailOptions = {
        from: email,
        to: 'melkotoury@gmail.com',
        subject: subject,
        text: `Name: ${name}\nEmail: ${email}\nMessage: ${message}`,
        attachments: file ? [{ filename: file.originalFilename, path: file.filepath }] : [],
      };

      try {
        await transporter.sendMail(mailOptions);
        resolve(NextResponse.json({ message: 'Email sent successfully' }));
      } catch (error) {
        resolve(NextResponse.json({ message: 'Error sending email', error }, { status: 500 }));
      }
    });
  });
}
